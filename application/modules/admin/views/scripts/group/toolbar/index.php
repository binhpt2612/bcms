<?php
$linkActiveItems = "#";
$btnActiveItems = $this->cmsButton('Active', 'fa fa-plus', $linkActiveItems, 'submit');

$linkInActiveItems = "#";
$btnInActiveItems = $this->cmsButton('InActive', 'fa fa-close', $linkInActiveItems, 'submit');

$linkAddItem = $this->baseUrl($this->currentController . '/add/');
$btnInAddItems = $this->cmsButton('Add New', 'fa fa-plus-circle', $linkAddItem, 'link');

$linkDelete = "#";
$btnDeleteItems = $this->cmsButton('Delete', 'fa fa-trash-o', $linkDelete, 'link');

$linkSortItems = $this->baseUrl($this->currentController . '/sort/');
$btnSortItems = $this->cmsButton('Sort Items', 'fa fa-sort', $linkSortItems, 'link');

if ($this->arrayParams['action'] == 'add') {
    $linkSaveItem = $this->baseUrl($this->currentController . '/add/');
} elseif (isset($this->arrayParams['id']) && $this->arrayParams['id'] != NULL) {
    $linkSaveItem = $this->baseUrl($this->currentController . '/edit/id/' . $this->arrayParams['id']);
}
if (isset($linkSaveItem) && $linkSaveItem != null) {
    $btnSaveItem = $this->cmsButton('Save', 'fa fa-save', $linkSaveItem, 'submit');
}

$linkBack = $this->baseUrl($this->currentUrl . '/admin/group/index');
$btnBack = $this->cmsButton('Back', 'fa fa-reply', $linkBack, 'link');

if (isset($this->arrayParams['id'])) {
    $linkAccepDelete = $this->baseUrl($this->currentController . '/delete/id/' . $this->arrayParams['id']);
    $btnAccepDelete = $this->cmsButton('Accept', 'fa fa-thumbs-up', $linkAccepDelete, 'submit');
}

$linkEditItem = $this->baseUrl($this->currentController . '/edit/id/' . $this->Item['id']);
$btnEditItem = $this->cmsButton('Edit', 'fa fa-edit', $linkEditItem, 'link');

switch ($this->arrayParams['action']) {
    case 'index' : $btn = $btnSortItems . ' ' . $btnDeleteItems . ' ' .
                $btnInAddItems . ' ' . $btnInActiveItems . ' ' . $btnActiveItems;
        break;
    case 'edit' : $btn = $btnBack . ' ' . $btnSaveItem;
        break;
    case 'add' : $btn = $btnBack . ' ' . $btnSaveItem;
        break;
    case 'delete' : $btn = $btnBack . ' ' . $btnAccepDelete;
        break;
    case 'info' : $btn = $btnBack . ' ' . $btnEditItem;
        break;
}
?>

<div class="box-header">
    <?php echo $btn ?>
</div>