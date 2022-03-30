export class Card {
  constructor(id, options, title, body) {
    this.id = id
    this.options = options
    this.title = title
    this.body = body
  }

  initialize(){
    return `<div class="card ${this.options.open}">
        <div class="card-header" id="${this.id}" data-toggle="collapse" data-target="#${this.options.id_collapse}" aria-expanded="${this.options.expanded}" aria-controls="${this.options.id_collapse}" role="button">
          <span class="collapsed collapse-title">${this.title}</span>
        </div>
        <div id="${this.options.id_collapse}" class="collapse show pt-1" aria-labelledby="${this.id}" data-parent="#${this.options.id_father}">
          <div class="card-body">
               ${this.body}
          </div>
        </div>
      </div>`
  }
}
