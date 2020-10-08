import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


import home from '../pages/home.vue'
import project_details from '../pages/project_details.vue'
import project_owner from '../pages/project_owner.vue'

import project_category from '../pages/admin/project_category.vue'

let Admin = ['Admin'];


export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: home,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'Home',
      }

    },

    {
      path: '/project_details',
      name: 'project_details',
      component: project_details,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'project_details',
      }

    },
    {
      path: '/project_owner',
      name: 'project_owner',
      component: project_owner,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'project_owner',
      }

    },




    {
      path: '/admin/project_category',
      name: 'project_category',
      component: project_category,
      meta: {
         // guest: true,
         // allowedUserType: ['All'],
          title: 'project_category',
      }

    },

  ],

});
