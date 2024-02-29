<template>
    <TheHeader />
    <TheMenu />
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>


    </div>
    <!-- end main content-->
    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto" @click="toggleSettings">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch"
                        :checked="lightModeChecked" @change="toggleTheme('light')">
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="/assets/css/bootstrap-dark.min.css" data-appStyle="/assets/css/app-dark.min.css"
                        :checked="darkModeChecked" @change="toggleTheme('dark')">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
</template>

<script>
import TheHeader from '../components/TheHeader.vue';
import TheMenu from '../components/TheMenu.vue';

export default {
    components: {
        TheHeader,
        TheMenu,
    },
    data() {
        return {
            lightModeChecked: true,
            darkModeChecked: false
        };
    },
    methods: {
        toggleSettings() {
            const body = document.body;
            // Kiểm tra xem body có chứa class 'sidebar-enable' không
            if (body.classList.contains('right-bar-enabled')) {
                // Nếu có, loại bỏ class 'sidebar-enable' và 'vertical-collapsed'
                body.classList.remove('right-bar-enabled');
            }
        },
        toggleTheme(theme) {
            const body = document.body;
            const wrapper = document.querySelector('.simplebar-content-wrapper');
            if (theme === 'light') {
                // Chuyển sang chế độ sáng
                body.style.setProperty('--bs-body-color', '#505d69');
                body.style.setProperty('--bs-body-bg', '#eff3f6');

                this.lightModeChecked = true;
                this.darkModeChecked = false;
                if (this.lightModeChecked == true) {
                    wrapper.style.color = '#505d69';
                    wrapper.style.backgroundColor = '#eff3f6';
                }


            } else if (theme === 'dark') {
                // Chuyển sang chế độ tối
                body.style.setProperty('--bs-body-color', '#79859c');
                body.style.setProperty('--bs-body-bg', '#1d222e');
                this.lightModeChecked = false;
                this.darkModeChecked = true;

                if (this.darkModeChecked == true) {
                    wrapper.style.color = '#79859c';
                    wrapper.style.backgroundColor = '#1d222e';
                }
            }
        }
    }
}
</script>