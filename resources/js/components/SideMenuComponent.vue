<template>
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item" :class="{ active : ciclo == true }">
            <a class="nav-link" :href="base_url + 'page/1'">
                El ciclo de caja y sus componentes
            </a>
        </li>
        <li class="nav-item" :class="{ active : enfasis == true }">
            <a class="nav-link" :href="base_url + 'page/5'">
                Énfasis en la rotación de cartera inventarios y cuentas por pagar
            </a>        
        </li>
        <li class="optionsNav">    
            <ul>
                <li class="nav-item" :class="{ active : componentes == true }"> 
                    <a class="nav-link" :href="base_url + 'page/6'">
                        <img :src="base_url + 'imgs/a-icon.svg'" alt="">
                        Componentes generales
                    </a>
                </li>
                <li class="nav-item" :class="{ active : iniciativas == true }">
                    <a class="nav-link" :href="base_url + 'page/7'">
                        <img :src="base_url + 'imgs/b-icon.svg'" alt="">
                        Iniciativas más comunes
                    </a>
                </li>
                <li class="nav-item" :class="{ active : vehiculos == true }">
                    <a class="nav-link" :href="base_url + 'page/8'">
                        <img :src="base_url + 'imgs/c-icon.svg'" alt="">
                        Vehículos financieros        
                    </a>
                </li>
            </ul>    
        </li>
        <li class="nav-item" :class="{ active : constitucion == true }">
            <a class="nav-link" :href="base_url + 'page/29'">
                Constitución del playbook    
            </a>    
        </li>
        <li class="nav-item" :class="{ active : recomendaciones == true }">
            <a class="nav-link" :href="base_url + 'page/32'">
                Recomendaciones finales        
            </a>
        </li>
        <li class="nav-item" :class="{ active : quices == true }">
            <a class="nav-link" :href="base_url + 'page/11'">
                Quices        
            </a>    
        </li>
        <li class="nav-item" :class="{ active : evaluaciones == true }">
            <a class="nav-link" :href="base_url + 'page/'">
                Evaluación final
            </a>    
        </li>    
        <li class="nextBack">
            <a :href="beforePage" class="back"><img :src="base_url + 'imgs/arrow-back.svg'" :alt="beforePage"></a>
            <a :href="nexPage" class="next"><img :src="base_url + 'imgs/arrow-next.svg'" :alt="nexPage"></a>
        </li>

    </ul>
    <!-- -->
</template>
<script type="application/javascript">
  export default {
    name: "SideMenu",
    props: [ 'pageNum', 'ciclo', 'enfasis', 'componentes', 'iniciativas', 'vehiculos', 'constitucion', 'recomendaciones', 'quices', 'evaluaciones' ],
    data(  ) {
      return {
        base_url: window.location.protocol + "//" + window.location.host + "/",
        nexPage: '',
        beforePage:'',
      }
    },
    created(  ) {
        if ( this.pageNum == 1 ) {
            let next = parseInt( this.pageNum ) + 1;
            //
            this.beforePage = this.base_url;
            this.nexPage = this.base_url + 'page/' + next;
        } else {
            let before = parseInt( this.pageNum ) - 1;
            let next = parseInt( this.pageNum ) + 1;
            //
            this.beforePage = this.base_url + 'page/' + before;
            if ( this.pageNum == 40 ) {
                this.nexPage = this.base_url;
            } else {
                this.nexPage = this.base_url + 'page/' + next;
            }
            
        }
    },
    methods: {
        
    },    

  }
</script>