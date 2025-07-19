(function(api) {

  api.sectionConstructor['noctiva-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const noctiva_section_lists = ['banner', 'service'];
  noctiva_section_lists.forEach(noctiva_homepage_scroll);

  function noctiva_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('noctiva_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);