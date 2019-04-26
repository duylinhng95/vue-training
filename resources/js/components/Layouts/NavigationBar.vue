<template>
    <span>
        <v-navigation-drawer app v-model="drawer" dark disable-resize-watcher>
            <v-list>
                <v-list-tile><v-list-tile-content>Home</v-list-tile-content></v-list-tile>
                <v-divider></v-divider>
                <v-list-tile><v-list-tile-content>Recipes</v-list-tile-content></v-list-tile>
                <v-divider></v-divider>
                <v-list-tile><v-list-tile-content>Blog</v-list-tile-content></v-list-tile>
                <v-divider></v-divider>
                <v-list-tile><v-list-tile-content>Contact Us</v-list-tile-content></v-list-tile>
                <v-divider></v-divider>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar color="#f44336" dense class="navigation-bar px-5">
            <v-toolbar-side-icon class="hidden-md-and-up" @click="drawer = !drawer"></v-toolbar-side-icon>
            <v-flex xs2 class="text-xs-center">
                    <img src="../../../asset/logo-small.png">
            </v-flex>
            <v-flex xs8 class="hidden-sm-and-down text-xs-center">
                <v-btn flat class="white--text">Home</v-btn>
                <v-btn flat class="white--text">Recipes</v-btn>
                <v-btn flat class="white--text">Blog</v-btn>
                <v-btn flat class="white--text">Contact Us</v-btn>
            </v-flex>
            <v-spacer class="hidden-md-and-up"></v-spacer>
            <v-toolbar-items xs2 class="text-xs-center">
                <v-btn depressed color="#484646" class="white--text ma-0 fill-height">
                    <v-icon>fa fa-user</v-icon>
                </v-btn>
                <v-btn depressed color="#6a6969" class="white--text ma-0 fill-height">
                    <v-icon>fa fa-plus</v-icon>
                </v-btn>
            </v-toolbar-items>
        </v-toolbar>
    </span>
</template>

<script>
	export default {
		name: "NavigationBar",
		data() {
			return {
				drawer: false
			};
		}
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
