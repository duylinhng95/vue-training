<template>
    <v-toolbar color="#f44336" dense class="navigation-bar px-5">
        <v-toolbar-title>
            <img src="../../../asset/logo-small.png">
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn flat class="white--text">Home</v-btn>
        <v-btn flat class="white--text">Recipes</v-btn>
        <v-btn flat class="white--text">Blog</v-btn>
        <v-btn flat class="white--text">Contact Us</v-btn>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn depressed color="#484646" class="white--text ma-0 fill-height">
                <v-icon>fa fa-user</v-icon>
            </v-btn>
            <v-btn depressed color="#6a6969" class="white--text ma-0 fill-height">
                <v-icon>fa fa-plus</v-icon>
            </v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
	export default {
		name: "NavigationBar"
	}
</script>

<style scoped>
    .navigation-bar {
        font-family: "Poppins", sans-serif;
        text-transform: capitalize;
        font-size: 13px;
        font-weight: 500;
        text-decoration: none;
    }

    .v-btn.fill-height {
        border-radius: 0;
    }
</style>
