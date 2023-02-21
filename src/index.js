import Lead from './components/Lead.vue'
import Rule from './components/Rule.vue'

window.panel.plugin('wizhou/kirby-coeur-de-fer', {
  blocks: {
    lead: Lead,
    rule: Rule
  }
})
