<template>

    <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!-- User details -->
    <div class="user-profile text-center mt-3">
        <div class="">
            <img src="/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
        </div>
        <div class="mt-3">
            <h4 class="font-size-16 mb-1">Julia Hudda</h4>
            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu"
        @v-model:openKeys="selectedKeys"
        @v-model:selectedKeys="preOpenKeys"
        mode="inline" 
        >
            <li class="menu-title">Menu</li>

            <li key="admin-users">
                <router-link class=" waves-effect" :to="{name:'admin-users'}">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                    <span>Dashboard</span>
                </router-link>
            </li>

            <li key="admin-roles">
                <router-link  class=" waves-effect" :to="{name:'admin-roles'}">
                    <i class="ri-calendar-2-line"></i>
                    <span>Calendar</span>
                </router-link>
            </li>

            

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
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