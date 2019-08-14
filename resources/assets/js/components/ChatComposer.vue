<template lang="html">
   <div class="chat-composer"> 
  <input type="text" placeholder="écrire votre message" v-model="messageText" @keyup.enter="envoyerMessage">
 <button class="btn btn-primary" @click="envoyerMessage">envoyer</button>
   </div>
</template>

<script>
export default {
data(){
	return {
	messageText:''
	}
},
methods:{
	envoyerMessage(){
	this.$emit('messagesent' ,{
	message: this.messageText,
	author:"john Doe"
	});
	this.messageText='';

	}
}
	
}
</script>
   <style lang="css">
.chat-composer{
	display: flex;
}
.chat-composer input{
	flex: 1 auto;
}
.chat-composer button{
	border-radius: 0;
}


   </style>

