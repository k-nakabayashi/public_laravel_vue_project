<template>
  <ul>
    <li v-on:click="changePage('/home')" class="c-Main-Menus__element isActive">
        <p>Twitter アカウント</p>
    </li>
    <li v-on:click="changePage('/target_list')" class="c-Main-Menus__element">
        <p>ターゲット<br>アカウント</p>
    </li>
    <li v-on:click="changePage('/follow_key')" class="c-Main-Menus__element">
        <p>フォロワーサーチ<br>キーワード</p>
    </li>
    <li v-on:click="changePage('/favorite_key')" class="c-Main-Menus__element">
        <p>いいねキーワード</p>
    </li>
  </ul>
</template>

<script>
export default {
  name: "main_menu",
  
  computed: {

  },
  methods: {
    changePage: function (page) {
      this.$router.push(page);
    }
  },
}
</script>

<style lang="scss" scoped>
.isActive {
    background: #fff;

    p {
      color: #48A2F1;
      transition: color 0.5s;
      position: relative;

      &:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 120%;
        width: 3px;
        background: #1E71BA;
      }
    }

  }
</style>