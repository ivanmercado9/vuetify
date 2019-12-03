<template>
  <div class="fill-height">
    
    <v-row  class="fill-height">
      <v-col sm="2" fill-height class="pt-0 pr-0 white">
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