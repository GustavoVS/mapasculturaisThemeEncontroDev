    <?php if($this->isEditable() || $entity->area_plantavel): ?>
    <p><span class="label">Area Plantavel: </span><span class="js-editable" data-edit="area_plantavel" data-original-title="Area Plantavel" data-emptytext="Especifique a area plantavel <?php $this->dict('entities: of the space') ?>"><?php echo $entity->area_plantavel; ?></span></p>
    <?php endif; ?>