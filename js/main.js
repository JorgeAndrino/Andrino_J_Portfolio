(()=> {
  const vm = new Vue({
      el: '#Gallery',

      data: {
          projectdata : [],
      },

      created : function() {
          this.fetchprojectsData(null);
      },

      methods : {
          fetchMore(e) {
              this.fetchprojectsData(e.currentTarget.dataset.projects);
          },

          loadProjects(e) {

              e.preventDefault();

              dataKey = e.currentTarget.getAttribute('href');

              currentData = this.projectdata.filter(tbl_gallery => tbl_gallery.project === dataKey);

              this.showDetails = true;

              setTimeout(function() { window.scrollTo(0, 1200); }, 500);
          },
        
            fetchprojectsData(project) {
             url = project ? `./includes/index.php?movie=${project}` : './includes/index.php';

             fetch(url) // pass in the one or many query
             .then(res => res.json())
             .then(data => {
                if (project) {
                    // getting one image, so use the single array
                    console.log(data);
                    this.projectdata = data;
                } else {
                    // push all the portfolio content into the video array
                    console.log(data);
                    this.projectdata = data;
                }
            })
            .catch(function(error) {
                console.log(error);
            });
        }
        
        }
        
    });
    
 })();