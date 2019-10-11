<template>
  <div class="pa-5">
    <v-alert icon="mdi-shield-lock-outline" prominent text type="info">
      <strong>Donec quam felis, ultricies.</strong> Sed in libero ut nibh placerat accumsan.. Curabitur blandit mollis lacus. Curabitur blandit mollis lacus.
    </v-alert>
    <v-row class="">
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
    </v-row>
    <v-row class="">
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
      <v-col>
        <v-card class="pa-3" outlined tile>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae laudantium totam magni</p>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
    export default {
        // inject: ['theme'],
        mounted() {

            const self = this;

            self.$store.commit('setBreadcrumbs',[
                {label:'Dashboard',name:''}
            ]);
        }
    }
</script>