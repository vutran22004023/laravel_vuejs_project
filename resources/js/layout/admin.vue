<template>
    <TheHeader />
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <!-- User details -->
            <div class="user-profile text-center mt-3">
                <div class="">
                    <img src="/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="mt-3">
                    <h4 class="font-size-16 mb-1">Julia Hudda</h4>
                    <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                        Online</span>
                </div>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                    <TheMenu />
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
</template>

<script>
import TheHeader from '../components/TheHeader.vue';
import TheMenu from '../components/TheMenu.vue';
export default {
    components: {
        TheHeader,
        TheMenu,
    }
}
</script>