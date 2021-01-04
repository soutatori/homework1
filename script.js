  $(function(){
	$('#form').validate({
		rules: {
			family_name: {
				required: true,
			},
			last_name: {
				required: true,
			},
			family_name_kana: {
				required: true,
                
messages: {
  family_name: {
    required: 'お名前を入力して下さい',
  },
  last_name: {
    required: 'メールアドレスを入力して下さい',
  },
  family_name_kana: {
    required: '電話番号を入力して下さい',
  },
},
			},
		},
	})
})