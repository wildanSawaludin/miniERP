

<script type="text/javascript">
	
function pullFolders(selectedItem) {

	
	$.post('<?php echo fuel_url("rate_direct_billing/coil"); ?>',
		{ storage_account : selectedItem },
		function(response) {  
			
		}  
	);
}


 </script> 

 
  <script type="text/javascript">
function load_party_account() {
    var account_id = $("#coil").val();
    var accountname = $("#coil :selected").html();
    loadfolderlist(account_id, accountname);
 
}

function refresh_folderlist() {
    var account_id = $("#coil").val();
    var selected = $("#coil :selected").html();
    load_party_account();
}
$(document).ready(function() { 

    $("#coil").change(function(data) {
        load_party_account();
    });
    load_party_account();
});
</script> 
 

<div id="main_top_panel">
	<h2 class="ico ico_rate_direct_billing">Rate Direct Billing</h2>
</div>

<?php include_once(RATE_DIRECT_BILLING_PATH.'views/_blocks/toolbar.php');?>		
<?php include_once(RATE_DIRECT_BILLING_PATH.'views/_blocks/layout.php');?>		

 <input type="hidden" id="textstorage" name="textstorage" />   
