import Vue from 'vue';
import FindDoctor from './FindDoctor.vue';  // Import the FindDoctor component

Vue.component('find-doctor', FindDoctor);  // Register it globally

new Vue({
    el: '#app'
});
