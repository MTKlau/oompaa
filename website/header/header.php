<header>
  <div id="headWrap">
    <h1>OOMPAA</h1>
    <?php include("header/server-switcher.html") ?>
  </div>
</header>

<div id="headHolder"></div>


<style rel="stylesheet">
  
  header{
    position: fixed;
    min-width:100%;
    background-color: lightgrey;
    height:50px;
    z-index: 9001;
  }

  #headHolder{
    min-width:100%;
    background-color: lightgrey;
    height:60px;

  }

  #headWrap{
    position: relative;
    top:10px;
    margin:auto;
    margin-top:0px;
    padding:0px;
    width:calc(90% + 40px);
    height:100%;
    background-color: #60D4AE;
    z-index: 9001;
  }
  #headWrap h1 {
    width:180px;
    margin:auto;
    padding-top:10px;
    color: #000;
  }

</style>