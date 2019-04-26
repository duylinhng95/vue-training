<template>
    <v-layout justify-center fill-height align-center column class="banner-section">
        <h1 class="font-weight-medium white--text mb-3 display-3">+20, 000</h1>
        <h3 class="font-weight-thin white--text mt-3 display-3 mb-5">Cooking Recipes</h3>
        <div class="listing-search">
            <form>
                <v-card class="input-border-section">
                    <v-layout row>
                        <v-flex xs4>
                            <v-text-field
                                    hide-details
                                    flat
                                    solo
                                    label="Keywords..."
                                    prepend-inner-icon="far fa-question-circle"></v-text-field>
                        </v-flex>
                        <v-flex xs4>
                            <v-select
                                    hide-details
                                    flat
                                    solo
                                    prepend-inner-icon="far fa-folder-open"
                                    :items="items"
                            ></v-select>
                        </v-flex>
                        <v-flex xs4>
                            <v-btn color="#6a6969" class="white--text fill-height btn-search mx-auto my-0 d-block">Search</v-btn>
                        </v-flex>
                    </v-layout>
                </v-card>
            </form>
        </div>
    </v-layout>
</template>

<script>
	export default {
		name: "Banner",
		data: () => ({
			items: ['Foo', 'Bar', 'Fizz', 'Buzz']
		})
	}
</script>

<style scoped>
    .banner-section {
        background-image: url("http://nilethemes.com/html/cook-note/assets/img/banner_1.jpg");
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -o-background-size: cover;
        max-height: 65vh;
    }

    .listing-search {
        background: rgba(255, 255, 255, 0.5);
        padding: 15px;
        border-radius: 15px;
        width: 45%;
    }

    .input-border-section {
        border-radius: 10px;
        padding: 5px;
    }

    .listing-search .btn-search {
        width: 50%;
    }
</style>
