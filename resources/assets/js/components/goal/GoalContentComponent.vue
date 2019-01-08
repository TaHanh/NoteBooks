<template>
    <div class="goal">
        <div class="title-goal">
            Tiêu đề mục tiêu  
            <div class="done-goal" ata-toggle="tooltip"  title="Hoàn thành mục tiêu">
                <input id="option1" name="option1" type="checkbox"/>
                <label for="option1"></label>
            </div>
        </div>
        <div class="content-goal">
            Nội dung mục tiêu
            <br/>

            <!-- if (plan) -->
            <ul>
                <li><router-link to="/notebook/plan/view">Đi tới kế hoạch</router-link></li>
                <li><a data-toggle="modal" data-target="#editModal" title="Tạo mục tiêu mới">Sửa</a></li>
                <li><a data-toggle="modal" data-target="#delModal" title="Tạo mục tiêu mới">Xóa</a></li>
            </ul>
            <p class="day-created">
                27/07/2016
            </p>
        </div>
    </div>
</template>
