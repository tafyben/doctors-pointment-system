import Vue from 'vue';
import FindDoctor from './FindDoctor.vue';
import AddBtn from "./AddBtn.vue";  // Import the FindDoctor component

Vue.component('find-doctor', FindDoctor);  // Register it globally
Vue.component('add-btn', AddBtn);

new Vue({
    el: '#app'
});
