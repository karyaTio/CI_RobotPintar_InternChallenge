# How to view this website
1. Download Codeigniter
2. Simply download and copy these file into the root of codeigniter
3. Rename the folder file to robotpintar.com
4. run databasescript.sql in your query tab
5. access the website on localhost/robotpintar.com

## or you can download it from this link
https://drive.google.com/file/d/1EhsRW0P0Gw8ZU7SgMcMOIicujOejCLR6/view?usp=sharing
### Note that downloading project from this link will not always up-to-date

# Available feature
- Authentication
- We now must login first as admin to create, update, delete a robot
- Admin can now create, update, and delete a product from admin panel
- Admin can now upload image to robots
- Admin can do Brand in admin panel

# Note From Developer
- a data robot that has been inside the transaction table cannot be deleted
- if you want to test CRUD on robot its better to create robot first

# Bugs
- Robot card view is broken when the screen get smaller (Consider creating custom CSS for it)
- When trying to edit the robot the current brand, and usablity is not automatically selected
- Price sometime change to 999.99
- Navigation gone when on tablet view down
- Cannot edit image of robot if ediited then the original image is lost(but we can upload image on create)

# Todo
- [ ] Learning Ajax
- [ ] Implement Ajax to the project
- [ ] Adding search & filter feature
- [ ] Beautify the Front End
- [x] Creating Dashboard product management for admin
- [ ] Creating Dashboard transaction data for admin
- [ ] Creating Dashboard user data for admin
- [x] Creating Dashboard view for admin
- [x] Design UI Structure in the papper
- [x] Chose CSS framework
- [x] Implement chossed framework to the current project
- [x] Make the project navigateable
- [ ] Make the project look presentable
- [x] Learning to create auhtentication system
- [x] Implement auhtentication system to the project
- [ ] Adding User to the project
- [ ] User can buy a robot
- [ ] Upgrade session flash data into pop up view like
- [x] Can upload images in robot
- [ ] when showing robot if we hover the image pop up the image in larger version
- [x] Make the script more readable
- [ ] Convert the language to english only
- [x] Converting CSS framework from Bulma to Materialize
- [ ] use only 1 footer
- [ ] Responsive for different device

# Todo (database)
- [ ] create a trigger to reduce the number of stock when a user buy product
- [ ] converting database to english language only


# Learning objective for this project
- [x] Html, CSS, PHP, Javascript
- [ ] Jquery, Ajax
- [x] CSS Framework(Materialize)
- [x] Code Igniter
- [x] MVC, ERD
- [x] Responsive layout
- [ ] Crossbrowser capability
- [x] Github
- And many more