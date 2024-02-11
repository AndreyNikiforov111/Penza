<template>
	<h1>Заявление</h1>
    <form  @submit.prevent="saveForm" method="POST">
        <div class="">Введите имя </div>
        <input type="text" v-model="message.username" class="input">

        <div class="">Обращение</div>
        <input type="text" v-model="message.text" class="input">
        <button type="submit">Отправить</button>
    </form>

    <div v-if="result">
        <div class="" style="background: #6dc26d">{{result}}</div>
    </div>
</template>

<script lang="ts">
import axios from "axios";
import { defineComponent } from 'vue';

	export default defineComponent({
        components: {},
        setup() {
            return {};
        },
        data() {
            return {
                message: {
                    username: '',
                    text: ''
                },
                result:''
            }
        },
        methods: {
            saveForm() {
                this.$store.dispatch('saveFormData', this.message);
                axios.post('/api/massage', this.message)
                    .then(response => {
                        this.result = response.data
                        console.log('Password updated successfully', response.data);
                    })
                    .catch(error => {
                        /*if (error.response.status === 422) {
                            // Если получен статус 422 (неправильные данные), обрабатываем ошибки валидации из Laravel
                            this.errors = Object.values(error.response.data.errors).flat();
                        }*/
                        console.error('An error occurred:', error);
                    });
            },
            submitForm() {

            }
        }
    })
</script>

<style lang="less" scoped></style>
