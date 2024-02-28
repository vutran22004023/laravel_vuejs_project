<template>
    
    <a-menu
      v-model:openKeys="openKeys"
      v-model:selectedKeys="selectedKeys"
      mode="inline" 
      class="metismenu list-unstyled"
    >
        <li class="menu-title">Menu</li>
        <a-menu-item key="admin-users" class="waves-effect">
            <router-link :to="{name:'admin-users'}">
                <i class="ri-dashboard-line"></i>
                <span>Tài Khoản</span>
            </router-link>
        </a-menu-item>
        <a-menu-item key="admin-roles" class="waves-effect">
            <router-link :to="{name:'admin-roles'}">
                <span>Tài Khoản</span>
            </router-link>
        </a-menu-item>
        <a-menu-item key="admin-settings" class="waves-effect">
            <router-link :to="{name:'admin-settings'}">
                <span>Tài Khoản</span>
            </router-link>
        </a-menu-item>
            
    </a-menu>
</template>


<script >
import { defineComponent } from 'vue';
import {useMenu} from '../store/use-menu.js';
import { storeToRefs } from 'pinia'
export default defineComponent ({
    setup() {
    const store = useMenu( );
    
    return  {
    ...storeToRefs(store)
}
}
})

</script>