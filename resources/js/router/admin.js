import LayoutAdmin from '../layout/admin.vue';
import PagesAdminUser from '../pages/admin/users/index.vue';
import PagesAdminRoles from '../pages/admin/roles/index.vue';
import PagesAdminSetting from '../pages/admin/settings/index.vue';
const admin =[{
    path:"/admin",
    component:LayoutAdmin,
    children: [
        {
            path: "users",
            name: "admin-users",
            component: PagesAdminUser
        },
        {
            path: "roles",
            name: "admin-roles",
            component: PagesAdminRoles
        },
        {
            path: "settings",
            name: "admin-settings",
            component: PagesAdminSetting
        }
    ]
}]

export default admin;