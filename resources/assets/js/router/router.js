window.Vue = require('vue');
import VueRouter from 'vue-router';
import Index from '../pages/Index.vue';
import DialyComponent from '../components/dialy/DialyComponent.vue';
import DialyContentComponent from '../components/dialy/DialyContentComponent.vue';
import GoalComponent from '../components/goal/GoalComponent.vue';
import EventComponent from '../components/event/EventComponent.vue';
import TimetableComponent from '../components/timetable/TimetableComponent.vue';
import ExpenseComponent from '../components/expense/ExpenseComponent.vue';
import PlanComponent from '../components/plan/PlanComponent.vue';
import PlanContentComponent from '../components/plan/PlanContentComponent.vue';
import FeedbackComponent from '../components/feedback/FeedbackComponent.vue';
import UserComponent from '../components/user/UserComponent.vue';
window.Vue.use(VueRouter);
const routes = [
  {
    path: '/notebook',
    component: Index,
    children: [
      {
        name: 'dialy',
        path: 'dialy',
        component: DialyComponent
      },
      {
        path: 'dialy/:id',
        name: 'dialycontent',
        component: DialyContentComponent,
        props: true
      },
      {
        name: 'goal',
        path: 'goal',
        component: GoalComponent
      },
      {
        name: 'event',
        path: 'event',
        component: EventComponent
      },
      {
        name: 'expense',
        path: 'expense',
        component: ExpenseComponent
      },
      {
        path: 'plan',
        name: 'plan',
        component: PlanComponent
      },
      {
        path: 'plan/:id',
        name: 'plancontent',
        component: PlanContentComponent
      },
      {
        name: 'timetable',
        path: 'timetable',
        component: TimetableComponent
      },
      {
        name: 'feedback',
        path: 'feedback',
        component: FeedbackComponent
      },
      {
        name: 'user',
        path: 'user',
        component: UserComponent
      }
    ]
  },
  {
    path: '*',
    redirect: '/notebook/goal'
  }
];
const router = new VueRouter({ mode: 'history', routes });
export default router;
