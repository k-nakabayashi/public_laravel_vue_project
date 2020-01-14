<template>
  <ul class="u-row c-Accounts">
    <li v-for="item in tw_accounts" class="u-col-6 u-p-16 u-rel" v-bind:key="item.id">
      <div class="u-container">
        <div class="u-row">
          <figure class="c-Accounts__img u-col-2">
            <img src="" alt="">aa
          </figure>
          <dl class="u-col-10">
            <dt class="f-txt-4">{{item.screen_name}}</dt>
            <dd class="u-txt-l u-pl-16">
              <p>フォロー : <span></span>1000</p>
              <p>フォロワー : <span></span>1000</p>
            </dd>
            <dt class="u-mt-16 f-txt-4">自動機能の状態</dt>
            <dt class="u-txt-l u-pl-16 u-mt-16 u-ch-mr-32">
              <p class="a-Btn--grey"><span>フォロー</span></p>
              <p class="a-Btn--grey"><span>いいね</span></p>
              <p class="a-Btn--grey"><span>ツイート</span></p>
            </dt>
          </dl>
        </div>
      </div>
    </li>
  
	</ul>
</template>

<script>
export default {
  name: "accout_cards",
  props: {

  },
  data: function () { return {
   
  }},
  computed: {

  },
  methods: {

  }
}
</script>
<style lang="scss" scoped>
.c-Accounts {
  margin-top: 60px;
  > * {
    background: #fff;
    border-radius: 10px;
    box-shadow: 3px 3px 3px #00000029;
  }
}
.c-Accounts__img {
  width: 100px;
}
</style>