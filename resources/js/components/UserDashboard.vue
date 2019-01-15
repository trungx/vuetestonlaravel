<template>
  <div class="user-dashboard">
    <div class="list-user-comp">
      <h4>List User</h4>
      <ListUser @userSelected="childrenSelectUser('test', ...arguments)"></ListUser>
    </div>
    <div class="user-detail-comp">
      <h4>User Detail</h4>
      <UserDetail :userDetailInfo="userSelectedFromChild"></UserDetail>
    </div>
  </div>
</template>

<script>
import ListUser from "./ListUser.vue";
import UserDetail from "./UserDetail.vue";
export default {
  components: {
    ListUser,
    UserDetail
  },
  data() {
    return {
      userSelectedFromChild: {}
    };
  },
  methods: {
    // Process event emitted from child
    childrenSelectUser(test, user, number, string) {
      this.userSelectedFromChild = user;
      console.log(user);
      console.log(number);
      console.log(string);
    }
  }
};
</script>

<style lang="scss" scoped>
</style>