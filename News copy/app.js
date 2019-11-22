var vue = new Vue({
  el: '#app',
  data: {
    enteredData: {
      plainText: '',
      password: '',
      email: '',
      date: ''
    }
  },

  methods: {
    onSubmit(evt) {
      evt.preventDefault()
      var formData = vue.toFormData(vue.enteredData)
      axios.post('api.php', formData)
      .then( response=> {
        if (response.data.error) {
          vue.noteMsg('danger', response.data.message)
        } else {
          vue.noteMsg('info', response.data.message)
        }
      })
      .catch( error=> {
        vue.noteMsg('danger', error)
      });
    },
    noteMsg(color, msg) {
      this.$bvToast.toast(msg, {
        title: 'System message',
        variant: color,
        solid: true
      })
    },
    toFormData(obj) {
      var form_data = new FormData()
      for(var key in obj) {
        form_data.append(key, obj[key])
      }
      return form_data
    }
  }
})