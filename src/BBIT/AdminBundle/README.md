

Appkernel:

    new BBIT\AdminBundle\BBITAdminBundle(),
    new Symfony\Bundle\AsseticBundle\AsseticBundle(),
    new Knp\Bundle\MenuBundle\KnpMenuBundle(),
    new BBIT\DataGridBundle\BBITDataGridBundle(),
    new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),


Config: 

    knp_menu:
        twig:
            template: BBITAdminBundle:Menu:menu.html.twig
    
    bbit_admin:
        route_prefix: admin

    
Create AdminClass:

    class ItemAdmin extends BaseAdmin
    {
        protected function listQueryBuilder() {
            $qb = parent::listQueryBuilder();
            
            return $qb;
        }
    
        protected function mapListFields(DataGridService $grid) {
            $grid->addField('name', 'string', [
                'sortable' => false,
                'filterable' => false,
            ]);
        }
    
        protected function mapFormFields(FormBuilder $formBuilder) {
            $formBuilder->add('name');
        }
    }

    
    
Create Service:

    item_admin:
        class: AppBundle\Admin\ItemAdmin
        arguments: ['AppBundle\Entity\Item']
        tags:
            - { name: bbit.admin, label: 'items', other: 'blabla' }
            
            

