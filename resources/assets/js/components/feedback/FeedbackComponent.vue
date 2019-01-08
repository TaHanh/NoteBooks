<template>
  <div class="height">
    <HeaderComponent title-header="Phản hồi"/>
    <div id="feedback">
      <div class="stars">
        <p>Đánh giá</p>
        <form action="">
          <input class="star star-5" id="star-5" type="radio" name="star"/>
          <label class="star star-5" for="star-5"></label>
          <input class="star star-4" id="star-4" type="radio" name="star"/>
          <label class="star star-4" for="star-4"></label>
          <input class="star star-3" id="star-3" type="radio" name="star"/>
          <label class="star star-3" for="star-3"></label>
          <input class="star star-2" id="star-2" type="radio" name="star"/>
          <label class="star star-2" for="star-2"></label>
          <input class="star star-1" id="star-1" type="radio" name="star"/>
          <label class="star star-1" for="star-1"></label>
        </form>
      </div>
      <form  action="/notebook/feedback">
        <label>Hãy để lại thông tin góp ý cũng như những điều bạn không hài lòng giúp mình nhé </label>
        <textarea rows="3" name="message"/>
        <label>Để lại thông tin của bạn</label>
        <button v-on:click="checkInput()">
          <input type="checkbox" name="accpept" value="accept" checked />
        </button>
        <input type="text" name="info" value="1234" id="info" />
        <input type="submit" @click="send()" value="12"/>
        <ButtonComponent name="Send"/>
      </form>
    </div>
  </div>
</template>
<script>
import HeaderComponent from '../header/HeaderComponent.vue';
import ButtonComponent from '../share/ButtonComponent.vue';
export default {
  data() {
    return {
      disInput: false
    };
  },
  components: {
    HeaderComponent,
    ButtonComponent
  },
  methods: {
    checkInput() {
      this.disInput = !this.disInput;
      const id = document.getElementById('info');
      //   console.log(document.getElementById('info'));
      if (this.disInput) {
        id.style.textDecoration = 'line-through';
        id.setAttribute('disabled', '');
      } else {
        id.style.textDecoration = 'none';
        id.removeAttribute('disabled');
      }
    },
    sent() {
      alert('Gửi thông tin thành công!');
    }
  }
};
</script>
