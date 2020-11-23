<template >
    <div class="align-items-center">
        <li class="nav-item offset-5">
            <input class="serch" type="search" style="font-family:FontAwesome !important ;
                                                            background-color: #fafafa;
                                                             border-radius:4px;
                                                             outline: none;
                                                             border-color: #eee;
                                                             width: 210px"
                                                                placeholder="        Search"
                   v-model="jj" v-on:keyup="autos">
            <div class="menu-search panel-footer" v-if="results.length" >
                <div v-for="res in results" :key="res">
                    <a :href="'/profile/' +res.id" class="ressearchone text-decoration-none">
                        <div class="d-flex align-items-center" style="height: 65px; padding: 10px">
                            <div class="pr-3">
                                <img :src="'/storage/'+ res.image" class="rounded-circle w-100 "
                                     style="max-width: 40px;">
                            </div>
                            <div class="pt-3">
                                <p style="line-height: 1.4rem">
                                                <span>
                                                <a href="" style="text-decoration: none">
                                                    <span class="text-dark" style="font-weight: bold">{{res.username}}</span>
                                                </a><br/>
                                                </span>
                                    <span style="color:#8e8e8e;font-size: 12px;">{{res.tittle}}</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <hr style="margin: -5px;"/>
                </div>
            </div>

        </li>
    </div>
</template>

<style>
    .ressearchone:hover{
        opacity: 0.3%;
    }
   .serch {
        border: 1px solid;
    }
    .menu-search{
        position:absolute ;
        z-index: 999999;
        background-color: #FFF;
        border: 1px solid #eee;
        width: 230px;
        margin-top: 10px;
        padding: 4px;
        border-radius:3px ;
        margin-left: -8px;
    }
</style>
<script>
    export default
    {
        data: function() {
           return {
               jj:'',
               results:[],
           }
        },
        methods: {
            autos(){
                this.results=[],
                    axios.post('/search', {
                    jj:this.jj
                }).then((response)=>{
                    console.log(response)
                    this.results=response.data;
                    });
                }

        },
    }
</script>
