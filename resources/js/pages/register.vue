<template>
    <div class="">
        <div class="bg-slate-300">

            <div class="container mx-auto lg:px-4 py-20 h-[32rem]">

                <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row mx-4">
                    <div class="panel w-full sm:w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
                        <form @submit.prevent="register" id="registration-form"
                            class="border-4 bg-white border-[#6ec1e4] shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2  ">
                            <input type="hidden" name="_token" value="0NjpnvRbsYPNL3V8gwY40P2HMQMMoqG1noH9eqQ6">
                            <div class="bg-primary-one-dark py-2 px-5 rounded-t-lg text-white">
                                <p class="text-3xl text-center  font-semibold">
                                    Register
                                </p>
                            </div>



                            <div class="mb-2">
                                <input id="name" type="name"
                                    class="form-input {{ $errors->has('name') ? ' is-invalid' : '' }}" required
                                    autocomplete="name" autofocus placeholder="Name" name="name" v-model="form.name">


                            </div>

                            <div class="mb-2">
                                <input id="email" type="email"
                                    class="form-input {{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                    autocomplete="email" placeholder="Email" name="email" v-model="form.email">
                                <div class="invalid-feedback text-red-500 font-bold" v-if="errorMessage">
                                    {{ errorMessage }}
                                </div>

                            </div>

                            <div class="mb-2">
                                <input type="text" id="phone" class="form-input @error('phone') error-field @enderror"
                                    placeholder="Phone" v-model="form.phone" />
                                <p id="valid-msg" class="hidden font-bold text-primary-one">
                                    <i class="fa fa-check-circle text-primary-one text-xl pt-2" aria-hidden="true"></i>
                                    Valid Number
                                </p>
                                <p id="error-msg" class="hidden text-red-500 font-bold"></p>

                                <input type="hidden" name="phone" id="phone2" />
                            </div>

                            <button type="submit" id="submit" class="btn1 btn-primary btn-block btn-flat">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { reactive, ref } from 'vue'
import axios from 'axios';
import { useRouter } from 'vue-router';
export default {
    setup() {
        const router = useRouter()
        let form = reactive({
            name: '',
            email: '',
            phone: '',
        });

        var errorMessage = ref('');
       var msg = ref();
        const register = async () => {
            await axios.post('/api/register', form).then(res => {
                if(res.data){
                    console.log(res.data);
                    msg = res.data.message;
                    router.push({name: 'login', msg})
                }
                console.log(res);
            }).catch(error => {

                if (error.response.status === 422) {

                    console.log(error.response.message);

                    errorMessage.value = error.response.data.message;
                    console.log(error);
                }


            });
        }

        return {
            form,
            register,
            errorMessage

        }

    }
}
</script>
