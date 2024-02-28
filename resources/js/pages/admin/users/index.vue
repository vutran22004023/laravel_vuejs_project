<template>
        Dat ka tang user
    <router-view></router-view>
</template>

<script>
import {useMenu} from '../../../store/use-menu.js';

export default {
    setup() {
        const store  = useMenu();
        store.onSelectedKeys(['admin-users'])
    }
}
</script>

