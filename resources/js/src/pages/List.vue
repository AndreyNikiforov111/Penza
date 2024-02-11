<template>

    <div>
        <h2>Содержание всех форм:</h2>
        <ul>
            <li v-for="(data, index) in formData" :key="index">
                <p>Имя: {{ data.username }}</p>
                <p>Теекст: {{ data.text }}</p>
            </li>
        </ul>
    </div>
</template>

<script lang="ts">

export default {
    computed: {
        formData() {
            return this.$store.state.formData;
        }
    }
};
</script>

<style lang="less" scoped>

</style>
