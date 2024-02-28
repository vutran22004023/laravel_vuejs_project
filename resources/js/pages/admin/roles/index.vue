<template>
    day la trang roles
</template>


<script>
import {useMenu} from '../../../store/use-menu.js';

export default {
    setup() {
        const store  = useMenu();
        store.onSelectedKeys(['admin-roles'])
    }
}
</script>