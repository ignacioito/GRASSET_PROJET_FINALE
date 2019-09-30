# AdminLTE v3 Bugs

- ControlSidebar
  - (JS) expanded and collapsed event missing
  - (JS) Wrong Top while Fixed Navbar
  - (CSS) Fixed Footer is above ControlSidebar


- Sidebar
  - (CSS) box-shadow visible on navbar after scrolling down while Fixed Navbar
    - may we missed box-shadow on brand-link
  - (CSS) Child Indent looks ugly with collapsed sidebar


- Colors
  - (CSS) bg-gradient-warning has white font color

- Widget (JS)
  - rename Widget to CardWidget
  - option for maximizeTrigger
  - Icon Options missing
    - collapseIcon
    - expandIcon
    - maximizeIcon
    - minimizeIcon
  - rebuild to able use methods without existing button
  - split toggleMaximize to maximize & minimize
  - rename data-widget to data-card-widget for buttons


- Cards
  - (CSS) Card Header / Tools float instead of position absolute on Card tools
  - (CSS) border color with bg-dark, ...
  -  with Calendar
    - (CSS) hover color is way to light


- Input
  - (CSS) Flat


- Input Group
  - (CSS) Box Shadow missing
  - (CSS) Flat for Input & Button


- Range
  - (CSS) Focus looks different in default than in custom colors


- iCheck 
  - (HTML) fix markup
  - (CSS) may there is a way to use iCheck without id/for="*"
  - (CSS) No focus style available


- Select2
  - (CSS) inputgroup lg


- Sidebar
  - (JS) add sidebar state remember script


- Direct Chat
  - (CSS) enhance style of direct chat card with bg-*
  - (CSS) light style for contacts pane
  - (JS) events missing


- Demo
  - ribbon style demo missing


- Docs
  - fixed header/footer part missing even the responsive classes
    - .anchor info
  - .dropdown-menu-xl
  - color options
    - custom range 
    - custom switch
    - bootstrap icheck


- UPGRADE GUIDE
  - .label => .badge
