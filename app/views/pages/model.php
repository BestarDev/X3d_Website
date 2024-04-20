<?php require APPROOT . '/views/inc/header.php'; ?>

  <!-- This is the content for X3D models and 3D Image Gallery -->
  <div id="models" class="main_contents pt-4" >
    <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
    <div class="row">
      <!-- X3D Model -->
      <div class="col-sm-8">
        <div class="card text-left">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <h4 class="card-title model-title"><?=$data['data']['x3dModelTitle']?></h4>

            <div class="btn-group pb-4" role="group" aria-label="Basic outlined example">
              <?php $active_array = ["", "", ""];
                $active_array[(int)$data['type']]="active" ;?>
              <!-- <a class="btn btn-outline-danger btn-responsive <?php echo $active_array[0]?>" onMouseUp="cokeScene();" id="cokeBtn"
                href="<?php echo URLROOT; ?>/model/cocacola">Coke</a>
              <a class="btn btn-outline-danger btn-responsive <?php echo $active_array[1]?>" onMouseUP="pepperScene();" id="pepperBtn"
                href="<?php echo URLROOT; ?>/model/pepsi">Pepper</a>
              <a class="btn btn-outline-danger btn-responsive <?php echo $active_array[2]?>" onMouseUp="spriteScene();" id="spriteBtn"
                href="<?php echo URLROOT; ?>/model/sprite">Sprite</a> -->
            </div>
            <!-- Place the X3D code here -->
            <div class="row model3D">
              <x3d class="w-100" id="wire">
                <scene>
                    <Switch whichChoice=<?=$data['type']?> id='SceneSwitch'>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../public/x3ds/cocacola.x3d" > </inline>
                        </transform>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../public/x3ds/coke.x3d" > </inline>
                        </transform>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../public/x3ds/pepsi.x3d" > </inline>
                        </transform>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../public/x3ds/fanta.x3d"> </inline>
                        </transform>
                        <transform>
                            <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../public/x3ds/soda.x3d"> </inline>
                        </transform>
                    </Switch>
                </scene>
              </x3d>
            </div> 
            <div id="model-description" class="py-2 mt-2 card-text">&nbsp<?=$data['data']['x3dCreationMethod']?></div>
            <div class="row py-2">
              <div class="col-sm-6">
                <div class="row g-2 align-items-center">
                  <div class="col-auto">
                    <label for="cameraSelect" class="col-form-label fs-4 fw-bold">Camera Views</label>
                  </div>
                  <div class="col">
                    <select name="camera" id="cameraSelect" class="form-select" onchange="cameraChange();">
                      <option value="front">Front</option>
                      <option value="back">Back</option>
                      <option value="left">Left</option>
                      <option value="right">Right</option>
                      <option value="top">Top</option>
                      <option value="bottom">Bottom</option>
                    </select>
                  </div>    
                </div>
              </div>
              
              <div class="col-sm-6">
                <div class="row g-2 align-items-center">
                  <div class="col-auto">
                    <label for="renderOptions" class="col-form-label fs-4 fw-bold">Render Mode</label>
                  </div>
                  <div class="col">
                    <select name="renderOption" id="renderOptions" class="form-select" onchange="renderChange();">
                      <option value="default">Default</option>  
                      <option value="wire">WireFrame</option>
                    </select>
                  </div>    
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>

      <!-- 3D image gallery -->
      <div class="col-sm-4">
        <div class="card text-left">
            <div class="card-header gallery-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h4 class="card-title">3D Images</h4>
              <div class="gallery" id="gallery">
                <div class="row g-4">
                  <div class="col-md-6">
                    <a href="<?php echo URLROOT; ?>/model/cocacola">
                      <img src="../public/images/gallery/cocacola.png" alt="Coca Cola" width="100%" class="rounded-3">
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="<?php echo URLROOT; ?>/model/coke">
                      <img src="../public/images/gallery/coke.png" alt="Coke"  width="100%" class="rounded-3">
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="<?php echo URLROOT; ?>/model/pepsi">
                      <img src="../public/images/gallery/pepsi.png" alt="Pepsi Cola" width="100%" class="rounded-3">
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="<?php echo URLROOT; ?>/model/fanta">
                      <img src="../public/images/gallery/fanta.png" alt="Fanta" width="100%" class="rounded-3">
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="<?php echo URLROOT; ?>/model/soda">
                      <img src="../public/images/gallery/soda.png" alt="Soda" width="100%" class="rounded-3">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-text description_gallery drinksText pt-4">
                <p>More and more Coca-Cola products will be listed here...</p>
              </div>
            </div>
        </div> <!-- End gallery card -->
      </div> <!-- End gallery column -->
    </div> <!-- End row for X3D Model and Gallery -->
  </div> 

<div class="row">
  <div class="col-sm-12 py-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?=$data['data']['modelTitle']?></h4>
        <h6 class="card-title py-2"><?=$data['data']['modelSubTitle']?></h6>
        <p class="card-text">&nbsp&nbsp<?=$data['data']['modelDescription']?></p>
        <button type="button" class="btn btn-primary">Find out more...</button>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>