<template>
    <div class="">
        <div class="bg-slate-300">

<div class="container mx-auto lg:px-4 py-20  h-[40rem]">
    <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row mx-4">

        <div class="panel w-full md:w-[60%] xl:w-[30%] mx-auto ">
            {{ form }}
            <form @submit.prevent="login" class=" bg-white border-4 rounded-3xl border-primary-two shadow-2xl px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2  ">
                <div class="bg-primary-one-dark py-2 px-5 rounded-t-lg">
                        <p class="text-3xl text-center text-white font-semibold">
                            Login
                        </p>
                    </div>
                <div class="mb-2">
                    <input id="email" type="email"
                        class="form-input @error('email') error-field @enderror" required
                        autocomplete="email" autofocus placeholder="" name="email"
                         v-model="form.email">

                </div>

                <div class="">
                    <input id="password" type="password"
                        class="form-input @error('password') error-field @enderror" required
                        autocomplete="password" autofocus placeholder=""
                        name="password" v-model="form.password">

                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember" class="">Remember me</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn1 btn-primary btn-block btn-flat hover:shadow-md">
                   Login
                </button>

                <p class="text-center">
                    <span class="px-2">or continue with</span>
                </p>

                <div class="flex w-full space-x-1 mx-auto justify-center">
                    <router-link :to="{name: 'register'}" class=" hover:shadow-lg py-3 w-1/2 border-primary-one border-2  rounded-lg flex justify-center items-center space-x-2">
                        <img src="{{ asset('images/sign-up.png') }}" alt="google" width="20" height="20">
                        <span>
                            Register
                        </span>
                    </router-link>
                    <!-- <a href="{{ url('redirect/google') }}" class="py-3 w-1/2 hover:border-primary-two border-2 border-t-purple-100 rounded-lg flex justify-center items-center space-x-2">
                        <img src="{{ asset('images/svg/google.svg') }}" alt="google" width="20" height="20">
                        <span>
                            Google
                        </span>
                    </a> -->
                </div>
            </form>

                <a class="mt-1 text-black font-semibold float-right hover:underline-offset-7 hover:underline" href="{{ route('password.request') }}">
                    Forgot password
                </a>

        </div>
    </div>
</div>
</div>
    </div>
</template>
<script>
import { reactive } from 'vue'
export default {
    setup(){
        let form = reactive({
            email: '',
            password: '',
        });

        const login =async()=> {
            await axios.post('/api/login',form).then(res=>{
                console.log(res);
            })
        }

        return {
            form,
            login
        }
    }
}
</script>
