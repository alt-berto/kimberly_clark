<template>
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" :href="base_url">
                El ciclo de caja y sus componentes
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Énfasis en la rotación de cartera inventarios y cuentas por pagar
            </a>        
        </li>
        <li class="optionsNav">    
            <ul>
                <li class="nav-item "> 
                    <a class="nav-link" href="#">
                        <img :src="base_url + 'imgs/a-icon.svg'" alt="">
                        Componentes generales
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <img :src="base_url + 'imgs/b-icon.svg'" alt="">
                        Iniciativas más comunes
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <img :src="base_url + 'imgs/c-icon.svg'" alt="">
                        Vehículos financieros        
                    </a>
                </li>
            </ul>    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Constitución del playbook    
            </a>    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Constitución del playbook    
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Recomendaciones finales        
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                Quices        
            </a>    
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
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
    props: ['pageNum'],
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
            this.nexPage = this.base_url + 'page/' + next;
        }
    },
    methods: {
        
    },    

  }
</script>