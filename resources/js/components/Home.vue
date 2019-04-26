<template>
    <v-app>
        <navigation-bar></navigation-bar>
        <banner></banner>
    </v-app>
</template>

<script>
	import NavigationBar from "./Layouts/NavigationBar"
    import Banner from "./HomePage/Banner"
	export default {
		name: "Home",
		components: {
			NavigationBar,
            Banner
		}
	}
</script>
