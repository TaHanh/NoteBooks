<template>
  <header>

  <v-navigation-drawer stateless value="true" >
    <v-list>
      <v-list-tile>
        <v-list-tile-action>
          <v-icon>home</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Home</v-list-tile-title>
      </v-list-tile>
      <router-link to="goal">
        <v-list-tile>
        <v-list-tile-action>
          <v-icon>near_me</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Mục tiêu</v-list-tile-title>
      </v-list-tile>
    </router-link>
        <v-list-group prepend-icon="star">
          <v-list-tile slot="activator">
            <v-list-tile-title>Kế hoạch</v-list-tile-title>
          </v-list-tile>

          <v-list-tile 
            v-for="(plan, i) in plans"
            :key="i"
            @click="">
            <v-list-tile-action>
              <v-icon></v-icon>
            </v-list-tile-action>
            <v-list-tile-title v-text="plan[0]"></v-list-tile-title>
            <v-list-tile-action>
              <v-icon v-text="plan[1]"></v-icon>
            </v-list-tile-action>
          </v-list-tile>
        </v-list-group>

        <v-list-group prepend-icon="create">
          <v-list-tile slot="activator">
            <v-list-tile-title>Chi tiêu cá nhân</v-list-tile-title>
          </v-list-tile>

          <v-list-tile 
            v-for="(expense, i) in expenses"
            :key="i"
            @click="">
            <v-list-tile-action>
              <v-icon></v-icon>
            </v-list-tile-action>
            <v-list-tile-title v-text="expense[0]"></v-list-tile-title>
            <v-list-tile-action>
              <v-icon v-text="expense[1]"></v-icon>
            </v-list-tile-action>
          </v-list-tile>
        </v-list-group>
        <v-list-tile>
        <v-list-tile-action>
          <v-icon>date_range</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Thời khóa biểu</v-list-tile-title>
      </v-list-tile>
      <v-list-tile>
        <v-list-tile-action>
          <v-icon>event</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Sự kiện</v-list-tile-title>
      </v-list-tile>
      <router-link to="diary">
      <v-list-tile>
        <v-list-tile-action>
          <v-icon>book</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Nhật ký</v-list-tile-title>
      </v-list-tile>
    </router-link>
      <v-list-tile>
        <v-list-tile-action>
          <v-icon>feedback</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Phản hồi</v-list-tile-title>
      </v-list-tile>
    </v-list>
  </v-navigation-drawer>

  </header>
</template>
<script>
  export default {
    data: () => ({
      expenses: [
        ['Nguồn thu', ''],
        ['Nguồn chi', ''],
      ],
      plans: [
        ['Kế hoạch ngắn hạn', ''],
        ['Kế hoach dài hạn', ''],
      ]
    })
  }
</script>