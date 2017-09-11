using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace $safeprojectname$
{
    /// <summary>
    /// Interaktionslogik für Window2.xaml
    /// </summary>
    public partial class Window2 : Window
    {
        public Window2()
        {
            InitializeComponent();
        }

        private void Window_Loaded(object sender, RoutedEventArgs e)
        {

            $safeprojectname$.modul120DataSet modul120DataSet = (($safeprojectname$.modul120DataSet)(this.FindResource("modul120DataSet")));
            // Lädt Daten in Tabelle "gradelist". Sie können diesen Code nach Bedarf ändern.
            $safeprojectname$.modul120DataSetTableAdapters.gradelistTableAdapter modul120DataSetgradelistTableAdapter = new $safeprojectname$.modul120DataSetTableAdapters.gradelistTableAdapter();
            modul120DataSetgradelistTableAdapter.Fill(modul120DataSet.gradelist);
            System.Windows.Data.CollectionViewSource gradelistViewSource = ((System.Windows.Data.CollectionViewSource)(this.FindResource("gradelistViewSource")));
            gradelistViewSource.View.MoveCurrentToFirst();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            Window Window1 = new Window1();
            Window1.Show();
            this.Close();
        }
    }
}
