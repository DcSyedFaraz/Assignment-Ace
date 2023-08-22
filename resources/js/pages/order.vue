<template>
    {{  }}
    <section class="container mx-auto w-[80%]">
        <form @submit.prevent="order" id="order-form" enctype="multipart/form-data">

            <div class="grid grid-col-3 sm:grid-cols-3 my-4 gap-x-4 gap-y-4  ">
                <div class="lg:col-span-2 md:col-span-3 sm:col-span-3 ">
                    <div class="lg:grid-cols-3 rounded-md">

                        <div class="grid lg:col-span-2">

                            <div class="bg-white rounded-lg shadow-xl">
                                <div class="  ">
                                    <div class="bg-primary-one-dark py-2  rounded-t-xl ">
                                        <p class="text-3xl text-white font-semibold ml-3">Order Details</p>
                                    </div>
                                </div>




                                <div class="w-auto grid lg:grid-cols-3 gap-4 my-1 mx-4">
                                    <div class="">
                                        <label for="paper_type" class="label">Paper Type:</label>
                                        <div class="relative">

                                            <select v-model="form.paper_type" name="paper_type" id="paper_type"
                                                class="order-input">
                                                <option value="0" disabled hidden>Paper Type</option>

                                                <option v-for="acad in orderData['paper_types']" :key="acad.id"
                                                    :value="acad.name">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fa fa-newspaper fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                        <span>

                                            <p class="text-red-600 text-sm" v-if="errorMessage['paper_type']">{{
                                                errorMessage['paper_type'][0] }}</p>


                                        </span>
                                    </div>

                                    <div class="">
                                        <label for="paper_type" class="label">Subjects:</label>
                                        <div class="relative">

                                            <select v-model="form.subject" name="subject" id="" class="order-input">
                                                <option value="0" disabled selected hidden>Subjects</option>
                                                <option v-for="acad in orderData['subjects']" :key="acad.id"
                                                    :value="acad.name">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fa fa-eye-dropper fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                        <span>

                                            <p class="text-red-600 text-sm" v-if="errorMessage['subject']">{{
                                                errorMessage['subject'][0] }}</p>


                                        </span>
                                    </div>

                                    <div class="">
                                        <label for="paper_type" class="label">Reference style:</label>
                                        <div class="relative">

                                            <select v-model="form.reference_style" name="reference_style" id=""
                                                class="order-input">
                                                <option value="0" hidden selected disabled>Reference Style</option>
                                                <option v-for="acad in orderData['reference_styles']" :key="acad.id"
                                                    :value="acad.name">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fas fa-border-style fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                        <span>

                                            <p class="text-red-600 text-sm" v-if="errorMessage['reference_style']">{{
                                                errorMessage['reference_style'][0] }}</p>


                                        </span>
                                    </div>


                                </div>


                                <div class="w-auto grid lg:grid-cols-1 gap-4 my-1 mx-4">

                                    <div class="">
                                        <label for="paper_type" class="label">Topic:</label>
                                        <div class="relative">


                                            <input v-model="form.paper_topic" type="text" name="paper_topic"
                                                placeholder="Topic...." class="order-input">
                                            <i class="fas fa-search fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>


                                        <p class="text-red-600 text-sm" v-if="errorMessage['paper_topic']">{{
                                            errorMessage['paper_topic'][0] }}</p>

                                    </div>

                                </div>




                                <div class="w-auto grid lg:grid-cols-1 gap-4 mx-4">
                                    <div class="">
                                        <label for="paper_type" class="label">Paper Instructions:</label>
                                        <div class="relative">

                                            <textarea v-model="form.detail" rows="2" type="text" name="detail"
                                                placeholder="Write Your Instructions Here.. "
                                                class="order-input"></textarea>

                                            <i class="fas fa-chalkboard-teacher fa-lg fa-fw inputWithIcon"
                                                aria-hidden="true"></i>
                                        </div>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['detail']">{{
                                            errorMessage['detail'][0] }}</p>


                                    </div>
                                </div>

                                <div class="w-auto grid lg:grid-cols-1 gap-4 mx-4">
                                    <div class="">
                                        <input multiple="" type="file" id="uploadInput" name="emailAttachments[]"
                                            class="form-control hidden"
                                            accept=".pdf, .ppt, .pptx, .doc, .docx, .xls, .xlsx, .csv, .txt, .jpeg, .jpg, .png, .gif, .sav, .sps, .spv, .spo, .mat, .zip"
                                            style="display: none;">
                                        <button type="button" id="uploadContainer" class="bg-primary-one-dark btn">Attach
                                            File(s)
                                        </button>
                                        <ul class="list-unstyled mt-2 mb-2 space-y-2" id="fileList"></ul>
                                        <p class="mb-0">
                                            <small>File types:
                                                <strong class="text-red-600">pdf, ppt, pptx, doc, docx, xls, xlsx, csv, txt,
                                                    jpeg, jpg, png, gif, sav, sps, spv, spo, mat, zip

                                                </strong>
                                            </small>
                                        </p>
                                    </div>
                                </div>



                                <div class="w-auto grid lg:grid-cols-2 gap-4 my-1 mx-4">
                                    <div class="">
                                        <label for="paper_type" class="label">Page(s):</label>
                                        <div class="relative">

                                            <select v-model="form.number_of_pages" name="number_of_pages" id="no_of_pages"
                                                class="get-fare order-input">

                                                <option value="0" selected hidden disabled>No. of Pages and Words Count
                                                </option>
                                                <!-- <option v-for="acad in orderData['fares']" :key="acad.id"
                                                    :value="acad.per_page_price">
                                                    {{ acad.per_page_price }}
                                                </option> -->

                                                <option v-for="i in 200" :key="i"
                                                    :value="250 * i + ' Words / ' + i + ' Pages'">
                                                    {{ 250 * i + ' Words / ' + i + ' Pages' }}
                                                </option>
                                            </select>
                                            <p class="text-red-600 text-sm" v-if="errorMessage['number_of_pages']">{{
                                                errorMessage['number_of_pages'][0] }}</p>

                                            <i class="fas fa-book fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>

                                    </div>

                                    <div class="">
                                        <label for="paper_type" class="label">Sources:</label>
                                        <div class="relative">

                                            <select v-model="form.style" name="style" id="" class="order-input">
                                                <option value="0" selected hidden disabled>Sources</option>
                                                <option v-for="i in 20" :key="i" :value="i">
                                                    {{ i }}
                                                </option>
                                            </select>
                                            <i class="fas fa-quote-left fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                        <span>

                                            <p class="text-red-600 text-sm" v-if="errorMessage['style']">{{
                                                errorMessage['style'][0] }}</p>


                                        </span>

                                    </div>





                                </div>
                                <div class="grid lg:grid-cols-2 gap-4 mx-4 my-1">
                                    <div class="">
                                        <label for="paper_type" class="label">Deadline:</label>
                                        <div class="relative">

                                            <select @change="handleSelectChange" v-model="form.deadline" name="deadline"
                                                id="deadline_id" class="get-fare order-input">
                                                <option hidden="" selected disabled>Deadline</option>

                                                <option v-for="acad in orderData['deadlines']" :key="acad.id"
                                                    :value="acad.id">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fas fa-hourglass-half fa-lg fa-fw inputWithIcon"
                                                aria-hidden="true"></i>
                                        </div>

                                        <span>

                                            <p class="text-red-600 text-sm" v-if="errorMessage['deadline']">{{
                                                errorMessage['deadline'][0] }}</p>

                                        </span>
                                    </div>

                                    <div class="">
                                        <label for="paper_type" class="label">Academic Level:</label>
                                        <div class="relative">

                                            <select @change="handleSelectChange" v-model="form.academic_level"
                                                name="academic_level" id="academic_level_id" class="get-fare order-input">
                                                <option hidden="" value="0" disabled="" selected="">
                                                    Academic Level</option>
                                                <option v-for="acad in orderData['academic_levels']" :key="acad.id"
                                                    :value="acad.id">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fas fa-graduation-cap fa-lg fa-fw inputWithIcon"
                                                aria-hidden="true"></i>
                                        </div>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['academic_level']">{{
                                            errorMessage['academic_level'][0] }}</p>

                                    </div>


                                </div>



                            </div>


                            <div class="bg-white rounded-md mt-5 pb-5 shadow-xl">
                                <div class=" ">
                                    <div class="bg-primary-one-dark py-2  rounded-t-xl ">
                                        <p class="text-3xl text-white font-semibold ml-3">Contact
                                            Information</p>
                                    </div>
                                </div>


                                <div class="w-auto grid lg:grid-cols-2 gap-4 my-1 mx-4">
                                    <div class="">
                                        <label for="paper_type" class="label">Name:</label>
                                        <div class="relative">

                                            <input v-model="form.name" type="text" placeholder="Enter Your Full Name"
                                                name="name" class="order-input">

                                            <i class="fas fa-user fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>

                                    </div>

                                    <div class="">
                                        <label for="paper_type" class="label">Email:</label>
                                        <div class="relative">

                                            <input v-model="form.email" type="text" placeholder="Enter Your Email"
                                                name="email" class="order-input">

                                            <i class="fas fa-envelope fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                    </div>


                                </div>
                                <div class="grid grid-cols-2 gap-4 mx-4 my-1">

                                    <span>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['name']">{{
                                            errorMessage['name'][0] }}</p>


                                    </span><span>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['email']">{{
                                            errorMessage['email'][0] }}</p>


                                    </span>
                                </div>


                                <div class="w-auto grid lg:grid-cols-2 gap-4 my-1 mx-4">

                                    <div class="">
                                        <label for="paper_type" class="label">Country:</label>
                                        <div class="relative">


                                            <select v-model="form.country" name="country" class="order-input">

                                                <option hidden="" value="0" disabled="" selected="">
                                                    Country
                                                </option>
                                                <option v-for="acad in orderData['countries']" :key="acad.id"
                                                    :value="acad.name">
                                                    {{ acad.name }}
                                                </option>
                                            </select>
                                            <i class="fas fa-flag fa-lg fa-fw inputWithIcon" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="paper_type" class="label">Phone no:</label>
                                        <div class="relative">


                                            <input v-model="form.phone" id="phone" name="Phone" type="tel"
                                                class="order-input " placeholder="Phone"
                                                oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                                                data-intl-tel-input-id="0">
                                            <input id="phone2" name="phone" type="hidden">
                                        </div>
                                    </div>


                                </div>
                                <div class="grid grid-cols-2 gap-4 mx-4 my-1">

                                    <span>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['country']">{{
                                            errorMessage['country'][0] }}</p>


                                    </span><span>

                                        <p class="text-red-600 text-sm" v-if="errorMessage['phone']">{{
                                            errorMessage['phone'][0] }}</p>


                                    </span>
                                </div>
                                <!-- {{ -- < div class="flex  justify-center" >
                                    <button type="submit" id = "btn-submit"
                                class="rounded-t-xl btn hover:shadow-xl " > Submit < /button>
                                    < /div> --}} -->

                            </div>
                        </div>



                    </div>
                </div>

                <div class="grid lg:col-span-1 sm:col-span-3 static mb-4">
                    <div class="summary">
                        <div class=" bg-white rounded-lg border-t-0   border-primary-one-dark border-2 sticky top-4">
                            <div class="bg-primary-one-dark py-2 rounded-t-lg">
                                <span class="ml-2 text-3xl text-white font-semibold">Order Summary</span>
                            </div>
                            <div class="card-body my-8">
                                <div class="mx-4 font-semibold grid grid-cols-2">
                                    <div class=" ">
                                        <ul>
                                            <li>Type of Paper</li>
                                            <li>Subject</li>
                                            <li>Reference Style:</li>
                                            <li>Deadline</li>
                                        </ul>
                                    </div>
                                    <div class=" ">
                                        <ul class="">
                                            <li id="paper_type_data">{{ form.paper_type }}--</li>
                                            <li id="subject_data">{{ form.subject }}--</li>
                                            <li id="referece_data">{{ form.reference_style }}--</li>
                                            <li id="deadline_data">{{ form.deadline }}--</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <div class="">
                                        <hr>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 my-5 mx-4 font-semibold">
                                    <div class=" ">
                                        <span class="writer">Academic Level</span>
                                    </div>
                                    <div class="">
                                        <span class=" " id="level_data">{{ form.academic_level }}</span>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <div class=" ">
                                        <hr>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 mx-4 font-semibold">
                                    <div class=" ">
                                        <span class="writer">No of Pages:</span>
                                    </div>
                                    <div class="">
                                        <span class=" " id="no_of_data">{{ form.number_of_pages }}</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 mx-4 font-semibold">
                                    <div class=" ">
                                        <span class="writer">Cost Per Page:</span>
                                    </div>
                                    <div class="">
                                        <span class=" " id="">£<span id="cost-per-page">0</span></span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 mx-4 my-3 font-semibold">
                                    <div class=" ">
                                        <span class="total">TOTAL</span>
                                    </div>
                                    <div class=" ">
                                        <span class="text-right d-block t-text">
                                            <span class=" text-primary-one-dark transf text-lg">£<span id="total-cost"
                                                    ref="total">0</span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mx-5">
                                    <div class=" p-t-10">
                                        <button class=" btn-pay" type="submit">Proceed to Checkout &nbsp;<i
                                                class="fas fa-credit-card"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>


        </form>

    </section>
</template>
<script setup>
import { reactive, ref, onMounted } from 'vue';
import axios from 'axios';
const orderData = ref([]);
const fares = ref();

const form = reactive({
    paper_type: '',
    subject: '',
    reference_style: '',
    paper_topic: '',
    detail: '',
    number_of_pages: '',
    style: '',
    deadline: '',
    academic_level: '',
    name: '',
    email: '',
    country: '',
    phone: '',
});

const errorMessage = ref('');

const order = async () => {
    try {
        const response = await axios.post('/api/order', form);
        console.log(response);
    } catch (error) {
        if (error.response && error.response.status === 422) {
            console.log(error.response.message);
            errorMessage.value = error.response.data.errors;
            console.log(error);
        }
    }
};

const getorder = () => {
    axios.get('api/orderget').then((res) =>
        orderData.value = res.data,
        fares.value = orderData.fares,
        console.log(fares)

    );
};
const getfare = () => {
    axios.get('api/getfare').then((res) =>

        fares.value = res.data,
        console.log(fares)
        );
};
const handleSelectChange = () => {
    console.log('Selected value changed:', form.deadline)
    console.log(this.$ref.total)

    fares.forEach(item => {
        if (form.deadline == item.deadline_id && form.academic_level == itme.academic_level_id) {
            const totalcost = this.$refs.total;
            console.log(this.$refs.total);
            totalcost.innerText = item.fare;
        }
    });
    // Perform actions based on the selected value
};


onMounted(() => {
    getorder();
    getfare();

});



</script>
