<template>
    <div class="height">
        <HeaderComponent title-header="Sự kiện"/>
        <div id="calendar" style="height: 800px;"></div>
    </div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import Vue from 'vue';
import Calendar from 'tui-calendar';
import 'tui-calendar/dist/tui-calendar.min.css';

Vue.use(VueTuicalendar);

// or

// import { VueTuicalendar } from '@lkmadushan/vue-tuicalendar';
export default {
  data() {
    return {
      // schedules: [
      //   {
      //     id: '1',
      //     calendarId: '1',
      //     title: 'A schedule',
      //     category: 'time',
      //     dueDateClass: '',
      //     start: '2018-05-22T22:30:00+09:00',
      //     end: '2018-05-23T02:30:00+09:00'
      //   },
      //   {
      //     id: '2',
      //     calendarId: '1',
      //     title: 'Another schedule',
      //     category: 'time',
      //     dueDateClass: '',
      //     start: '2018-05-23T17:30:00+09:00',
      //     end: '2018-05-24T17:31:00+09:00',
      //     isReadOnly: true
      //   }
      // ]
    };
  },
  components: {
    HeaderComponent
  },
  created() {
    // var Calendar = tui.Calendar;
    var calendar = new Calendar('#calendar', {
      defaultView: 'month',
      taskView: true,
      template: {
        monthGridHeader: function(model) {
          var date = new Date(model.date);
          var template =
            '<span class="tui-full-calendar-weekday-grid-date">' + date.getDate() + '</span>';
          return template;
        }
      }
    });
  },
  methods: {
    // mounted() {
    //   this.$refs.calendar.fireMethod('clear');
    //   this.$refs.calendar.fireMethod('getElement');
    //   this.$refs.calendar.fireMethod('changeView', 'month', true);
    //   this.$refs.calendar.registerEvent('beforeDeleteSchedule', event => {
    //     // do stuff here
    //   });
    // }
  }
};
</script>
