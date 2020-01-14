<template>
<div>

  <div v-if="path_location === '/home'" class="l-main__title u-ch-inline-block u-mr-40 u-rel">
    <p class="txt f-txt-1">{{auth_data.name}}さんのアカウントリスト<span>：</span></p>
    <p class="a-Btn--pink">
      <a v-if="tw_return_api_flg == false" v-bind:href="url_auth_api+req_token">追加</a>
      <a v-if="tw_return_api_flg == true" v-bind:href="path_location">追加する場合、このボタンをクリック</a>
    </p>
    <p v-if="Object.keys(this.tw_accounts).length === 0" class="a-Label"><span>アカウントを登録してくだい</span></p>
	</div>

  <div v-else-if="path_location === '/m_api_account'" class="l-main__title u-ch-inline-block u-mr-40 u-rel">
    <p class="txt f-txt-1">{{auth_data.name}}さんのアカウント<span>：</span></p>
    <p class="a-Btn--pink">
      <a v-if="tw_return_api_flg == false" v-bind:href="url_auth_api+req_token">追加</a>
      <a v-if="tw_return_api_flg == true" v-bind:href="path_location">追加する場合、このボタンをクリック</a>
    </p>
    <p v-if="Object.keys(this.tw_accounts).length === 0" class="a-Label"><span>アカウントを登録してくだい</span></p>
	</div>
  
</div>
</template>

<script>
export default {
  name: "page_title",
  
  computed: {

  },
  methods: {

  },
}
</script>