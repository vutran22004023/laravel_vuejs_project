<template>
    day la trang setting
</template>

<script>
import {useMenu} from '../../../store/use-menu.js';

export default {
    setup() {
        const store  = useMenu();
        store.onSelectedKeys(['admin-settings'])
    }
}
</script>