import { ref, computed } from 'vue'
import { defineStore } from 'pinia'

export const useUserData = defineStore('UserData', () => {
  const uuid = ref('0000001');
  const userstate = ref("admin");

  function setUserData(data: any) {
    uuid.value = data.uuid;
    userstate.value = data.userstate;
  }
  return { uuid, userstate, setUserData }
})
