<?php 
include "../JokeList/Controller.php";
?>

<div class="my-3">
            <div class="input-group w-25 m-auto">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"/>
                <button type="button" class="btn btn-outline-danger">search</button>
            </div>

    </div>


    <div class=" mt-5 d-flex justify-content-between mb-3">
        <div class="title col-6 ms-3">
          <i class="uil uil-laughing fs-2"></i>
           <span class="text fs-3 fw-bold">Jokes</span>
         </div>
         <div class="ms-auto me-4">
					<button class="btn btn-danger rounded-pill" name="buttonadd" data-bs-toggle="modal" data-bs-target="#modal-joke"><i class="uil uil-plus text-white"></i>&emsp;Add Joke</button>
				</div>   
    </div>

    <div class="card-body table-responsive ">
                <table class="table table-bordered border-light text-center table-hover  ">
                 <tr class="bg-dark text-white">
                    <td class="col-1">Number</td>
                    <td>Joke</td>
                    <td class="col-1">Update or Delete</td>
                 </tr>
                 <?php getJokes(); ?>
            </table>
      </div>     
  
      <div class="modal fade" id="modal-joke">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="../JokeForm/Controller.php" method="POST" name="add-joke">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="add-title">Add New Joke</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <input type="hidden" id="joke-id">
                                        <label class="form-label">Text</label>
								       <textarea class="form-control"  id="joke-text" name="joke" rows="10" id="joke-text"></textarea>
							    </div>
                                
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" name="savejoke" class="btn btn-primary " id="joke-save-btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>


        <div class="modal fade" id="modal-joke-update">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="../JokeForm/Controller.php" method="POST" name="update-joke">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="update-title">Update Joke</h5>
                                    <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                                </div>
                                <div class="modal-body">
                                        <input type="" id="joke-id-update" name="jokeid" value="">
                                        <label class="form-label">Text</label>
								       <textarea class="form-control"  id="joke-text-update" name="joke-update" rows="10" id="joke-text"></textarea>
							    </div>
                                
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" name="updatejoke" class="btn btn-warning text-white " id="joke-update-btn">Update</button>
                                    <button type="submit" name="deletejoke" class="btn btn-danger text-white " id="joke-delete-btn">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>

<script src="../assets/js/main.js"></script>