    <template>
    <div class="height">
      <router-link :to="{ name: 'plan' }">
      <HeaderComponent title-header="Kế hoạch"/>
      </router-link>
    <div class="plan-content">
        <div class="list-wrapper">
        <div class="list">
            <h3 class="heading">
                {{name}}
                <p>Don't Forget To...</p>
            </h3>
                    <form>
                        <div class="row item" :id="task.id" v-for="(task, index) in taskList" :key="index">
                            <div class="col-lg-7 col-11">
                                <input type="checkbox" :id="index" 
                                @click="checkStatus(index,task.id)"/>
                                <label :for="index" title="Hoàn thành">{{ task.name }}<span ></span></label>
                            </div>
                            <div class="col-lg-3 col-8  date">
                              Từ <b>{{ task.dateStart }}</b>
                              <br/>
                              Đến <b>{{ task.dateEnd }}</b>
                            </div>
                            <div class="col-lg-2 col-4 px-0">
                                <span class="icon" title="Sửa "
                            data-toggle="modal" data-target="#editModal">
                            <i class="far fa-edit"></i>
                            </span>
                            <span class="icon" title="Xóa"
                            data-toggle="modal" data-target="#delModal">
                            <i class="fas fa-minus-circle"></i>
                            </span>
                            </div>
                            <PlanDialogComponent :task="task"/>
                        </div>
                    </form>
        </div>
        <div class="switchMessage">
            <!-- <h3 class="count" v-if="statusAll() === 'count'">NUMBER out of LENGTHtasks completed</h3>
            <h3 class="done" v-else-if="statusAll() === 'done'">You're done!</h3> -->
            <h4 class="error">Error loading data :(</h4>
        </div>
        <div class="block-button button-style1 plan-create-button" 
          data-toggle="modal" data-target="#createModal" title="Tạo mục tiêu mới">
          <a href="#" class="button">
            <i class="fas fa-pencil-alt"></i>
          </a>
        </div>
        <DialogComponent />
    </div> 
    </div>
    </div>

    </template>
    <script>
import HeaderComponent from '../header/HeaderComponent.vue';
import DialogComponent from '../share/DialogComponent.vue';
import PlanDialogComponent from './PlanDialogComponent.vue';
export default {
  data() {
    return {
      name: 'title',
      taskList: [
        {
          id: 'Afhdgj1',
          name:
            'A PlanDialogComponent PlanDialogComponen0t PlanDialogComponent PlanDialogComponent',
          dateStart: '2018-06-07T00:00',
          dateEnd: '2018-06-07T00:00',
          status: 'doing'
        },
        {
          id: 'njsgay',
          name: 'b',
          dateStart: '2018-06-07T00:00',
          dateEnd: '2018-06-07T00:00',
          status: 'doing'
        },
        {
          id: 'shgj',
          name: 'n',
          dateStart: '2018-06-07T00:00',
          dateEnd: '2018-06-07T00:00',
          status: 'doing'
        }
      ]
    };
  },
  components: {
    HeaderComponent,
    DialogComponent,
    PlanDialogComponent
  },
  computed: {
    statusAll() {
      let check = 'done';
      //   this.taskList.find(function(ele) {
      //     if (ele.status === 'doing') {
      //       check = 'count';
      //     }
      //   });
      //   console.log(check);
      return check;
    }
  },
  methods: {
    checkStatus(index, id) {
      console.log(index, id);
      const eleInput = document.getElementById(index);
      const eleTask = document.getElementById(id);
      if (eleInput.checked) {
        eleTask.classList.add('checked');
      } else {
        eleTask.classList.remove('checked');
      }
    }
  }
};
</script>

