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
    /// Interaktionslogik für Window1.xaml
    /// </summary>
    public partial class Window1 : Window
    {
        public Window1()
        {
            InitializeComponent();
        }

        private void window_loaded (object sender, RoutedEventArgs e)
        {
            
        }
        private void DataGrid1_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {

        }

        private void Window_Loaded_1(object sender, RoutedEventArgs e)
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
            if (MessageBox.Show("Do you want to exit?", "Goodbye", MessageBoxButton.YesNo) == MessageBoxResult.Yes)
            {
                Application.Current.Shutdown();
            }
        }

        private void MenuItem_Click(object sender, RoutedEventArgs e)
        {
            Window Window2 = new Window2();
            Window2.Show();
            this.Close();
        }

        private void Label_MouseDown(object sender, MouseButtonEventArgs e)
        {
           
        }
    }
}
