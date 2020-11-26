<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">{{ $modal_title }}</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body {{ !empty($modal_body_class) ? $modal_body_class : '' }}">{{ !empty($modal_body) ? $modal_body : '' }}</div>
      <div class="modal-footer">
        <button type="button" class="btn {{ !empty($modal_btn1_class) ? $modal_btn1_class : '' }}" data-dismiss="modal">{{ $modal_btn1 }}</button>
        <a href="{{ url($modal_url) }}" class="btn {{ !empty($modal_btn2_class) ? $modal_btn2_class : '' }}">{{ $modal_btn2 }}</a>
      </div>
    </div>
  </div>
</div>