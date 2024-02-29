<template>
    <FullCalendar :options="calendarOptions" />
</template>

<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import timeGrid from '@fullcalendar/timegrid'

export default {
    components: {
    FullCalendar // make the <FullCalendar> tag available
    },
    data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin,timeGrid],
        initialView: 'timeGridWeek',
        headerToobar: {
            left: 'prve,next,today',
            center:'title',
            right:'dayGridMonth, timeGridWeek, timeGridDay'
        },
        allDaySlot: false,
        slotMinTime:'06:00:00',
        slotMaxTime:'20:00:00',
        dateClick: this.handleDateClick,

      }
        }
    },
    methods: {
    handleDateClick: function(clickInfo) {
      this.$emit('dateClick',clickInfo)
    }
  }
}
</script>